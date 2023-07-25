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

registerBlockType("planty/tastes", {
	title: __("Tastes", "planty"),
	icon: "heart",
	category: "theme",
	edit({ className, attributes, setAttributes }) {
		const { nb, tastes } = attributes;
		const nb_tastes =
			parseInt(nb) !== NaN && parseInt(nb) > 0 ? parseInt(nb) : 1;

		const elements = [...Array(nb_tastes)].map((_, i) => {
			return (
				<div className="taste" key={i}>
					<MediaUploadCheck>
						<MediaUpload
							type="image"
							onSelect={(image) => {
								let url =
									image.sizes.full.url.replace(
										"http://",
										"//"
									) || image.sizes.full.url;
								if (!tastes[i]) tastes[i] = {};
								const item = { ...tastes[i] };
								item.imageID = image.id;
								item.imageSrc = url;
								const items = [...tastes];
								items[i] = item;
								setAttributes({ tastes: items });
							}}
							render={({ open }) => {
								if (!tastes[i]) tastes[i] = {};
								const img = tastes[i].imageSrc || "";
								const taste = tastes[i].title || "photo goût";

								return (
									<Button
										onClick={open}
										className={
											img
												? "image-button existing"
												: "image-button button"
										}
									>
										{img ? (
											<img src={img} alt={taste} />
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
							typeof tastes[i] !== "undefined"
								? tastes[i].title
								: ""
						}
						onChange={(title) => {
							if (!tastes[i]) tastes[i] = {};
							const item = { ...tastes[i] };
							item.title = title;
							const items = [...tastes];
							items[i] = item;
							setAttributes({ tastes: items });
						}}
					/>
				</div>
			);
		});

		return (
			<div className={className}>
				<InspectorControls>
					<PanelBody title="Goûts" initialOpen={false}>
						<__experimentalNumberControl
							label="Nombre de goûts:"
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
