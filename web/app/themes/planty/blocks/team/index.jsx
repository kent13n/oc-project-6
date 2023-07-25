const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, MediaUpload, MediaUploadCheck } =
	wp.blockEditor;
const {
	ColorPicker,
	PanelBody,
	TextControl,
	Button,
	__experimentalNumberControl,
} = wp.components;
const { __ } = wp.i18n;

registerBlockType("planty/team", {
	title: __("Team", "planty"),
	icon: "buddicons-buddypress-logo", // check icon here : https://developer.wordpress.org/resource/dashicons/
	category: "theme",
	edit({ className, attributes, setAttributes }) {
		const { nb, teammates } = attributes;
		const nb_teammates =
			parseInt(nb) !== NaN && parseInt(nb) > 0 ? parseInt(nb) : 1;

		const elements = [...Array(nb_teammates)].map((_, i) => {
			return (
				<div className="teammate" key={i}>
					<MediaUploadCheck>
						<MediaUpload
							type="image"
							onSelect={(image) => {
								let url =
									image.sizes.full.url.replace(
										"http://",
										"//"
									) || image.sizes.full.url;
								if (!teammates[i]) teammates[i] = {};
								const item = { ...teammates[i] };
								item.photo = url;
								const items = [...teammates];
								items[i] = item;
								setAttributes({ teammates: items });
							}}
							render={({ open }) => {
								if (!teammates[i]) teammates[i] = {};
								const photo = teammates[i].photo || "";
								const teammate = teammates[i].name || "photo";

								return (
									<Button
										onClick={open}
										className={
											photo
												? "image-button"
												: "image-button button"
										}
									>
										{photo ? (
											<img src={photo} alt={teammate} />
										) : (
											"Choisir une image"
										)}
									</Button>
								);
							}}
						/>
					</MediaUploadCheck>
					<RichText
						tagName="h3"
						placeholder="Nom"
						value={
							typeof teammates[i] !== "undefined"
								? teammates[i].name
								: ""
						}
						onChange={(name) => {
							if (!teammates[i]) teammates[i] = {};
							const item = { ...teammates[i] };
							item.name = name;
							const items = [...teammates];
							items[i] = item;
							setAttributes({ teammates: items });
						}}
					/>
					<RichText
						tagName="p"
						placeholder="Rôle"
						value={
							typeof teammates[i] !== "undefined"
								? teammates[i].role
								: ""
						}
						onChange={(role) => {
							if (!teammates[i]) teammates[i] = {};
							const item = { ...teammates[i] };
							item.role = role;
							const items = [...teammates];
							items[i] = item;
							setAttributes({ teammates: items });
						}}
					/>
				</div>
			);
		});

		return (
			<div className={className}>
				<InspectorControls>
					<PanelBody title="Équipe" initialOpen={false}>
						<__experimentalNumberControl
							label="Nombre de personne:"
							min={1}
							max={12}
							value={attributes.nb}
							onChange={(val) => {
								setAttributes({
									nb: parseInt(val) || 1,
								});
							}}
						/>
					</PanelBody>
				</InspectorControls>

				{elements}
			</div>
		);
	},
	save() {
		return null;
	},
});
