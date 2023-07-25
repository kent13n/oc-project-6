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

registerBlockType("planty/testimonial", {
	title: __("Testimonial", "planty"),
	icon: "testimonial",
	category: "theme",
	edit({ className, attributes, setAttributes }) {
		const { nb, testimonials } = attributes;
		const nb_testimonials =
			parseInt(nb) !== NaN && parseInt(nb) > 0 ? parseInt(nb) : 1;

		const elements = [...Array(nb_testimonials)].map((_, i) => {
			return (
				<div className="testimonial" key={i}>
					<MediaUploadCheck>
						<MediaUpload
							type="image"
							onSelect={(image) => {
								let url =
									image.sizes.full.url.replace(
										"http://",
										"//"
									) || image.sizes.full.url;
								if (!testimonials[i]) testimonials[i] = {};
								const item = { ...testimonials[i] };
								item.imageID = image.id;
								item.imageSrc = url;
								const items = [...testimonials];
								items[i] = item;
								setAttributes({ testimonials: items });
							}}
							render={({ open }) => {
								if (!testimonials[i]) testimonials[i] = {};
								const img = testimonials[i].imageSrc || "";
								const name =
									testimonials[i].title ||
									"photo du commentaire";

								return (
									<Button
										onClick={open}
										className={
											img
												? "image-button"
												: "image-button button"
										}
									>
										{img ? (
											<img src={img} alt={name} />
										) : (
											"Choisir une image"
										)}
									</Button>
								);
							}}
						/>
					</MediaUploadCheck>
					<div className="testimonial-content">
						<RichText
							tagName="h2"
							placeholder="Nom"
							value={
								typeof testimonials[i] !== "undefined"
									? testimonials[i].title
									: ""
							}
							onChange={(title) => {
								if (!testimonials[i]) testimonials[i] = {};
								const item = { ...testimonials[i] };
								item.title = title;
								const items = [...testimonials];
								items[i] = item;
								setAttributes({ testimonials: items });
							}}
						/>
						<RichText
							tagName="p"
							placeholder="Commentaire"
							value={
								typeof testimonials[i] !== "undefined"
									? testimonials[i].content
									: ""
							}
							onChange={(content) => {
								if (!testimonials[i]) testimonials[i] = {};
								const item = { ...testimonials[i] };
								item.content = content;
								const items = [...testimonials];
								items[i] = item;
								setAttributes({ testimonials: items });
							}}
						/>
					</div>
				</div>
			);
		});

		return (
			<div className={className}>
				<InspectorControls>
					<PanelBody title="Témoignages" initialOpen={false}>
						<__experimentalNumberControl
							label="Nombre de témoignages:"
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
